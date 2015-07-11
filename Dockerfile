# blog-docker-compose-frontend/Dockerfile
FROM link0/base:latest
MAINTAINER Dennis de Greef <github@link0.net>

COPY start.sh /start.sh

CMD [ "/start.sh" ]
