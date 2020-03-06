FROM node:alpine

LABEL MAINTAINER="Vincent Letourneau <vincent@nanoninja.com>"

# COPY SOURCE DESTINATION
WORKDIR /usr/src/app
COPY . .
RUN npm i express
EXPOSE 3000
CMD [ "index.js" ]
