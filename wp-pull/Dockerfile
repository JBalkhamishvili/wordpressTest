FROM wordpress:cli

COPY ./pull.sh /pull.sh
RUN chmod +x /pull.sh

CMD [ "/pull.sh" ]