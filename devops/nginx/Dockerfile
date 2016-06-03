FROM nginx:latest

RUN  apt-get update \
  && apt-get install -y wget \
  && apt-get install -y locate \
  && rm -rf /var/lib/apt/lists/*

COPY symfony3.conf /etc/nginx/conf.d/symfony3.conf
