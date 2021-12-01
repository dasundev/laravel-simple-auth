![laravel simple auth banner](https://user-images.githubusercontent.com/54996800/140941830-cd237786-6531-4371-bb89-184fa1c6c9da.png)

Re-enable the make:auth command for laravel 6+ versions.

## Indroduction
Why I created this kind of package? Well, Suppose sometimes we forget to add `--auth` into a new project creation command, we will have to run below three commands
to make the laravel default authentication. 

01. `composer require laravel/ui`
02. `php artisan ui bootstrap --auth`
03. `npm install && npm run dev`

I know it's really annoying 😕 because we have to run three commands for make it. but before releasing the laravel 6.0
we could the same thing in one command. which is,

 `php artisan make:auth`
 
So in 6.0 version they removed that command from laravel. BUT now what is going with this package? Once you installed **laravel-simple-auth** that missed 
artisan command will be inside your project. It's pretty cool, nah?

## Usage
Okay, let's see how can we started, 

01. Install the package by running this command.
      `composer require dasundev/laravel-simple-auth`
      
02. Then run the old command which is love my most developers.
      `php artisan make:auth`

There is another cool option here, You can even pass the ui type like below. 

`php artisan make:auth vue`
`php artisan make:auth react`


> Important note: If you run only php artisan make:auth command without passing the UI type. you will get the Bootstrap UI by default.

## License

Copyright © Dasun Tharanga

Laravel Simple Auth is open-sourced package licensed under the [MIT license](LICENSE.md).
