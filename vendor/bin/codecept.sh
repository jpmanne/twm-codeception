#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../codeception/codeception"
BIN_TARGET="`pwd`/codecept.sh"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
