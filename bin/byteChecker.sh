#!/bin/bash

cat $1 | tr -d '\n'p | tr -d ' ' | wc -c