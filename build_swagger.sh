#!/bin/sh
LEAD_SWAGGER="https://developers.marketo.com/swagger/swagger-mapi.json"
ASSET_SWAGGER="https://developers.marketo.com/swagger/swagger-asset.json"
IDENTITY_SWAGGER="https://developers.marketo.com/swagger/swagger-identity.json"

MakeSwagger() {
  # Cleanup any lingering temporary directory so we're in a good state for the code generation.
  sudo find .build/ -mindepth 1 -not -name .gitignore -delete

  # Use docker to run the swagger codegen tool.
  docker run --rm -v ${PWD}:/local/ swaggerapi/swagger-codegen-cli generate \
    -i ${1} -l php -o /local/.build \
    -t /local/template/php/ \
    -DinvokerPackage=NecLimDul\\MarketoRest\\${2}

  sudo chown ${USER}: .build/ -R

  mkdir -p docs/${2}
  rm -rf docs/${2}/Api docs/${2}/Model
  mv .build/SwaggerClient-php/docs/* ./docs/${2}/

  mkdir -p src/${2}
  rm -rf src/${2}/*
  mv .build/SwaggerClient-php/lib/* ./src/${2}/

  # These are autogenerated tests.
  mkdir -p tests/${2}
  rm -rf tests/${2}/Api tests/${2}/Model
  mv .build/SwaggerClient-php/test/* ./tests/${2}/

  find .build/ -mindepth 1 -not -name .gitignore -delete
}

MakeSwagger ${LEAD_SWAGGER} Lead
MakeSwagger ${ASSET_SWAGGER} Asset
MakeSwagger ${IDENTITY_SWAGGER} Identity

# Fix broken codegen.
# https://github.com/swagger-api/swagger-codegen/issues/8599
sed -i -e "s/'HTML'or'Text'/\\\'HTML2\\\'or\\\'Text\\\'/g" ./src/Asset/Model/UpdateSnippetDynamicContentRequest.php
