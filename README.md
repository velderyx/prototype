<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
 Notes

## Dependencies
- **AdminLte**: Place it in the `public` directory.

## Troubleshooting

If `autoload not found` error occurs:  
1. Enable the `zip` extension in PHP by:  
   - Editing `php.ini` (Apache, XAMPP).  
   - Removing the `;` before `;extension=zip`.  
2. Run:  
   ```bash
   composer install
   ```

If `500` error occurs (`array 1 undefined`):  
dont forget the .env file

Replace the `getDate` function with the following code:  
```php
protected function getDateFromLine($line)
{
    $regex = env('PHP_CLI_SERVER_WORKERS', 1) > 1
        ? '/^\[\d+]\s\[([a-zA-Z0-9: ]+)\]/'
        : '/^\[([^\]]+)\]/';

    $line = str_replace('  ', ' ', $line);

    if (preg_match($regex, $line, $matches)) {
        // Ensure that $matches[1] exists before trying to use it
        if (isset($matches[1])) {
            return Carbon::createFromFormat('D M d H:i:s Y', $matches[1]);
        }
    }

    // Handle the case where the date could not be extracted
    return null; // Or throw an exception or return a default value
}
```

## Running on Localhost

Video Reference: [Watch the tutorial on YouTube](https://www.youtube.com/watch?v=ABxWF4WjLLE)

1. Navigate to `C:\xampp\apache\conf\extra`.
2. Edit the `httpd-vhosts.conf` file and add the following lines:
   ```apache
   <VirtualHost *:80>
       ServerAdmin webmaster@liefs.test
       DocumentRoot "C:/xampp/htdocs/prototype/public"
       ServerName liefs.test
       ErrorLog "logs/liefs.test-error.log"
       CustomLog "logs/liefs.test-access.log" common
   </VirtualHost>
   ```
3. Go to `C:\Windows\System32\drivers\etc`.
4. Edit the `hosts` file and add this line:  
   ```
   127.0.0.1       liefs.test
   ```
5. Create an `.htaccess` file in your project with the following content:  
   ```apache
   RewriteEngine On
   RewriteCond %{REQUEST_URI} !^/public/
   RewriteRule ^(.*)$ /public/$1 [L,QSA]
   ```

## Database Migration Notes

If the `location` table is created after production:  
1. Create the `location` table.  
2. Insert one row of data.  
3. Change the ID of the inserted row to `0`.  
4. Run the migration again. This should resolve errors.  

Reference: [StackOverflow - Madhur Baiya's Answer](https://stackoverflow.com/questions/21659691/error-1452-cannot-add-or-update-a-child-row-a-foreign-key-constraint-fails)

## Automating Backups

Use **Windows Task Scheduler** for daily backups. [Learn more](https://chatgpt.com/share/4a44d641-1c32-46bc-aca7-6d2f59181cbd)
