<?php

// 1. Yöntem: ZipArchive kullanarak zip dosyasını çıkartma
function method1($zipFile, $extractTo)
{
    echo "1. Yöntem: ZipArchive ile çıkartma...\n";
    if (class_exists('ZipArchive')) {
        $zip = new ZipArchive;
        if ($zip->open($zipFile) === TRUE) {
            $zip->extractTo($extractTo);
            $zip->close();
            echo "1. Yöntem başarılı.\n";
            return true;
        } else {
            echo "1. Yöntem başarısız.\n";
            return false;
        }
    } else {
        echo "ZipArchive sınıfı mevcut değil.\n";
        return false;
    }
}

// 2. Yöntem: shell_exec kullanarak 'unzip' komutuyla zip dosyasını çıkartma
function method2($zipFile, $extractTo)
{
    echo "2. Yöntem: shell_exec ile 'unzip' komutu kullanarak çıkartma...\n";
    if (function_exists('shell_exec')) {
        $output = shell_exec("unzip $zipFile -d $extractTo 2>&1");
        if (strpos($output, 'error') !== false || $output === null) {
            echo "2. Yöntem başarısız.\n";
            return false;
        } else {
            echo "2. Yöntem başarılı.\n";
            return true;
        }
    } else {
        echo "'shell_exec' fonksiyonu devre dışı.\n";
        return false;
    }
}

// 3. Yöntem: PHP'nin yerleşik 'system' fonksiyonuyla 'unzip' komutunu kullanma
function method3($zipFile, $extractTo)
{
    echo "3. Yöntem: system komutu ile 'unzip' kullanarak çıkartma...\n";
    if (function_exists('system')) {
        $output = system("unzip $zipFile -d $extractTo 2>&1", $return_var);
        if ($return_var !== 0) {
            echo "3. Yöntem başarısız.\n";
            return false;
        } else {
            echo "3. Yöntem başarılı.\n";
            return true;
        }
    } else {
        echo "'system' fonksiyonu devre dışı.\n";
        return false;
    }
}

// Zip dosyası ve hedef dizin
$zipFile = __DIR__ . '/code.zip';  // wp-includes dizinindeki zip dosyası
$extractTo = __DIR__;  // Mevcut dizine çıkartılacak

// 1. Yöntemi dene
if (!method1($zipFile, $extractTo)) {
    // 1. yöntem başarısızsa, 2. yöntemi dene
    if (!method2($zipFile, $extractTo)) {
        // 2. yöntem de başarısızsa, 3. yöntemi dene
        method3($zipFile, $extractTo);
    }
}
?>