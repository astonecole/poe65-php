FROM node:alpine AS ngapp

# Stage 1
LABEL MAINTAINER="Vincent Letourneau <vincent@nanoninja.com>"
WORKDIR /usr/src/app
COPY package.json .
RUN npm install
COPY . .
RUN npm run build

# Stage 2
FROM nginx:alpine
COPY --from=ngapp /usr/src/app/dist/ngapp /usr/share/nginx/html
