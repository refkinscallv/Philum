<?php

    namespace Philum\Packages;

    use RF\Crypto\Crypto AS RFCrypto;

    class Crypto extends RFCrypto {

        public function __construct() {
            parent::__construct([
                "encryptKey" => $_SERVER["ENCRYPT_KEY"] ?? "5b25a6eb09d99c162f82bde609751b11",
                "encryptCipher" => $_SERVER["ENCRYPT_CIPHER"] ?? "AES-256-CBC",
                "encryptStoreMethod" => "local",
                "encryptLimitLine" => $_SERVER["ENCRYPT_LIMIT"] ?? 1000,
                "encryptFile" => $_SERVER["ENCRYPT_FILE"] ?? $_SERVER["DOCUMENT_ROOT"] . "/writeable/encryption/general.txt"
            ]);
        }

    }
