FROM node:14-alpine

WORKDIR /var/www/html

RUN npm install

EXPOSE 8090

ENV NUXT_HOST=0.0.0.0

ENV NUXT_PORT=8090

CMD ["sh", "-c", "yarn install && yarn dev"]