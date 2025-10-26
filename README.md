# Composer Package

一个简短的Composer Package，测试发布安装流程。

## 安装
```bash
composer require lisanmiao/compser-package
```

## 使用方法
```php
use Lisanmiao\ComposerPackage\Calculator;

$calc = new Calculator();
echo $calc->add(2, 3); // 输出: 5
```
