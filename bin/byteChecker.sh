#!/bin/bash

cat $1 | tr -d ' ' | sed -E 's/(php|function)/\1 /g' | sed -E 's/(as)/ \1/g' | tr -d '\n' | wc -c