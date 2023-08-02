#!/usr/bin/env bash
# Create temporary folder
tmp_dir=$(mktemp -d -t ci-XXXXXXXXXX)

# Download file
curl -s $1 -o "$tmp_dir/result.zip"

# Unzip to target file
unzip -uo "$tmp_dir/result.zip" -d $2

# Delete temporary folder
rm -rf tmp_dir
