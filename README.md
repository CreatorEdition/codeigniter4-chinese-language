# CodeIgniter 4.5.5 中文语言包

这是一个适用于 **CodeIgniter 4.5.5** 的中文语言包，旨在为 CodeIgniter 项目提供简体中文本地化支持。您可以将其轻松集成到 CodeIgniter 项目中，并使用中文进行界面和错误提示。

## 功能

- 为 CodeIgniter 4.5.5 提供简体中文本地化的错误消息。
- （中长期内应该都没问题，发布这个版本的时候官方最后更新中文简体还是三年前）
- 支持框架常用功能的中文翻译，例如：数据库、验证、邮件、加密等。
- 易于安装和配置。

## 安装

### 1. 克隆仓库

首先，您需要将项目克隆到本地：

```bash
git clone https://github.com/CreatorEdition/codeigniter4-chinese-language.git
```

        "安装依赖：
```bash
composer install
```
将语言包文件复制到您的 CodeIgniter 项目的 app/Language/zh 目录下。如果没有 zh 目录，可以手动创建。
例如：
- `app/Language/zh/Errors.php` - 错误信息的中文翻译
- `app/Language/zh/Validation.php` - 验证规则的中文翻译
- `app/Language/zh/Email.php` - 邮件发送相关的中文翻译
- 其他系统消息文件，如 `Database.php`, `Files.php` 等。
编辑 `app/Config/App.php` 配置文件，将语言设置为中文：
```php
public $language = 'zh-CN';
```
完成上述步骤后，您的 CodeIgniter 项目将能够使用中文语言包显示错误消息和系统信息。
安装并配置完成后，CodeIgniter 将自动加载中文语言包，所有的系统消息和错误提示会显示为中文。
如果您希望在特定的控制器或方法中使用其他语言，可以通过以下方式切换语言：
```php
$this->language->setLocale('en');
```
