FROM node:18-alpine

WORKDIR /app

COPY ./yarn.json .
COPY ./yarn.lock .
COPY package.json .

RUN yarn install


COPY . .

EXPOSE 8000

CMD [ "yarn","start" ]