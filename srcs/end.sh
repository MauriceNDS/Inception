#!/bin/bash

rm -rf ./data/db/*
rm -rf ./data/wordpress/*
rm -rf ./data/wordpress/.*
docker-compose down -v
docker system prune -fa