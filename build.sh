#!/bin/bash
LEAD_SWAGGER="./marketo-apis/static/swagger-mapi.json"
ASSET_SWAGGER="./marketo-apis/static/swagger-asset.json"

MakeSwagger() {
  figlet "WOOOOOOOO"
  # Cleanup any lingering temporary directory so we're in a good state for the code generation.
  sudo find .build/ -mindepth 1 -not -name .gitignore -delete

  SERVICE=${1}
  NAME=${2}
  NAMESPACE="NecLimDul\\MarketoRest\\${NAME}"
  FULL_OUTPUT_PATH="${PWD}/.build/${NAME}"

  mkdir "${FULL_OUTPUT_PATH}/"
  if [ -f "${SERVICE}" ]; then
    cp "${SERVICE}" "${FULL_OUTPUT_PATH}/"
    SERVICE=$(basename ${SERVICE})
  fi

  shift 2
  EXTRA="${*}"
  sudo python3 ./openapi-php/build.py \
      --user="${USER}" \
      --service-file="${SERVICE}" \
      --namespace="${NAMESPACE}" \
      --base-directory="${FULL_OUTPUT_PATH}" $EXTRA

  sudo chown "${USER}": .build/ -R

  mkdir -p "docs/${NAME}"
  rsync -a --delete ".build/${NAME}/docs/" "./docs/${NAME}/"

  mkdir -p "src/${NAME}"
  rsync -a --delete ".build/${NAME}/src/" "./src/${NAME}/"

  mkdir -p "tests/${NAME}"
  rsync -a --delete ".build/${NAME}/tests/" "./tests/${NAME}/"

  find ${FULL_OUTPUT_PATH} -mindepth 1 -delete
}

if [ ! -d "${PWD}/openapi-php" ]; then
  git clone git@gitlab.com:neclimdul/openapi-php.git -b 3.x
else
  cd openapi-php || exit
  git checkout 3.x
  git pull
  cd - || exit
fi

if [ ! -d "${PWD}/marketo-apis" ]; then
  git clone https://github.com/AdobeDocs/marketo-apis.git
else
  cd marketo-apis || exit
  git checkout main
  git pull
  cd - || exit
fi

MakeSwagger ${LEAD_SWAGGER} Lead
MakeSwagger ${ASSET_SWAGGER} Asset

# Markto is missing docs on some things which leads to whitespace errors. Let phpcbf fix them.
./vendor/bin/phpcbf

# Fix broken codegen.
# https://github.com/swagger-api/swagger-codegen/issues/8599
sed -i -e "s/'HTML'or'Text'/\\\'HTML2\\\'or\\\'Text\\\'/g" ./src/Asset/Model/UpdateSnippetDynamicContentRequest.php
sed -i -e "s/'HTML'or'Text'/\\\'HTML2\\\'or\\\'Text\\\'/g" ./tests/Asset/Model/UpdateSnippetDynamicContentRequestTest.php
