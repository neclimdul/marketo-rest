#!/bin/bash
LEAD_SWAGGER="https://developer.adobe.com/marketo-apis/swagger-mapi.json"
ASSET_SWAGGER="https://developer.adobe.com/marketo-apis/swagger-asset.json"

MakeSwagger() {
  # Cleanup any lingering temporary directory so we're in a good state for the code generation.
  sudo find .build/ -mindepth 1 -not -name .gitignore -delete

  SERVICE=${1}
  NAME=${2}
  NAMESPACE="NecLimDul\\MarketoRest\\${NAME}"
  FULL_OUTPUT_PATH="${PWD}/.build/${NAME}"
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

  find .build/ -mindepth 1 -not -name .gitignore -delete
}

if [ ! -d "${PWD}/openapi-php" ]; then
  git clone git@gitlab.com:neclimdul/openapi-php.git -b method-overloading
else
  cd openapi-php || exit
  git checkout method-overloading
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
