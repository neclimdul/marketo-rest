#!/bin/sh
LEAD_SWAGGER="https://developers.marketo.com/swagger/swagger-mapi.json"
ASSET_SWAGGER="https://developers.marketo.com/swagger/swagger-asset.json"
IDENTITY_SWAGGER="https://developers.marketo.com/swagger/swagger-identity.json"

build_swagger() {
  SERVICE=${1}
  NAMESPACE=${2}
  sudo python3 ./openapi-php/build.py \
    --user=${USER} \
    --namespace="NecLimDul\\MarketoRest\\${NAMESPACE}" \
    --psr4-base="NecLimDul\\MarketoRest" \
    --service-file=${SERVICE} \
    --docs-directory="${PWD}/docs/${NAMESPACE}" \
    --src-directory="${PWD}/src/" \
    --tests-directory="${PWD}/tests/"
}

if [ ! -d "$PWD/openapi-php" ]; then
  git clone https://gitlab.com/neclimdul/openapi-php.git
else
  cd openapi-php || exit
  git pull
  cd - || exit
fi

build_swagger ${LEAD_SWAGGER} Lead
build_swagger ${ASSET_SWAGGER} Asset
build_swagger ${IDENTITY_SWAGGER} Identity

# Fix broken codegen.
# https://github.com/swagger-api/swagger-codegen/issues/8599
# sed -i -e "s/'HTML'or'Text'/\\\'HTML2\\\'or\\\'Text\\\'/g" ./src/Asset/Model/UpdateSnippetDynamicContentRequest.php
