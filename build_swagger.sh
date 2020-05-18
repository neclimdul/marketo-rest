#!/bin/sh
LEAD_SWAGGER="https://developers.marketo.com/swagger/swagger-mapi.json"
ASSET_SWAGGER="https://developers.marketo.com/swagger/swagger-asset.json"
IDENTITY_SWAGGER="https://developers.marketo.com/swagger/swagger-identity.json"

MakeSwagger() {
  # Cleanup any lingering temporary directory so we're in a good state for the code generation.
  sudo rm -rf tmp
  mkdir tmp

  # Use docker to run the swagger codegen tool.
  docker run --rm -v ${PWD}/tmp:/local/php swaggerapi/swagger-codegen-cli generate \
    -i ${1} -l php -o /local/php \
    -DinvokerPackage=MarketoRest\\${2}

  sudo chown ${USER}: tmp -R

  mkdir -p docs/${2}
  rm -rf docs/${2}/Api docs/${2}/Model
  mv tmp/SwaggerClient-php/docs/* ./docs/${2}/

  mkdir -p src/${2}
  rm -rf src/${2}/*
  mv tmp/SwaggerClient-php/lib/* ./src/${2}/

  # This copies over template tests that could destroy real tests...
  mkdir -p tests/${2}/*
  rm -rf tests/${2}/*
  mv tmp/SwaggerClient-php/test/* ./tests/${2}/

  rm -rf tmp
}

MakeSwagger ${LEAD_SWAGGER} Lead
MakeSwagger ${ASSET_SWAGGER} Asset
MakeSwagger ${IDENTITY_SWAGGER} Identity
