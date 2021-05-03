# Laravel Simple Auth
A Simple method to create laravel authentication for an existing laravel project.

![laravel simple auth 9 22 38 AM](https://user-images.githubusercontent.com/54996800/116844714-84546400-ac01-11eb-9f96-d73b12787c58.png)

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
      `composer require laravel-simple-auth`
      
02. Then run the old command which is love my most developers.
      `php artisan make:auth`

There is another cool option here, You can even pass the ui type like below. 

`php artisan make:auth vue`
`php artisan make:auth react`


> Important note: If you run only php artisan make:auth command without passing the UI type. you will get the Bootstrap UI by default.

## License

Copyright © Dasun Tharanga

Laravel Simple Auth is open-sourced package licensed under the [MIT license](LICENSE.md).
