<?php

$age = 25;

/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmaktadır.
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 *
 */

if($age > 0 && $age <=14){ // $age 0'dan büyükse ve aynı zamanda 14ten küçükse veya 14e eşitse
    echo 'Çocuk';
}elseif($age >= 15 && $age <= 24){ // $age 15'ten büyükse veya 15'e eşitse, ve aynı zamanda 24'ten küçükse veya 24e eşitse
    echo 'Genç';
}elseif($age >= 25 && $age <= 64){ // $age 25'ten büyükse veya 25'e eşitse, ve aynı zamanda 64'ten küçükse veya 64e eşitse
    echo 'Yetişkin';
}elseif($age >= 65){ // $age 65'ten büyükse veya 65'e eşitse
    echo 'Yaşlı';
}
