<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tests progress..,

   PASS  Tests\Unit\ReplyTest
  ✓ a reply has an owner

   PASS  Tests\Unit\ThreadTest
  ✓ a thread has replies
  ✓ a thread has a creator
  ✓ a thread can add a reply
  ✓ a thread belongs to a category
  ✓ a thread can make a string path

   PASS  Tests\Feature\CreateThreadsTest
  ✓ guests cant create threads
  ✓ guests cant see the create thread page
  ✓ an authenticated user can create new forum threads

   PASS  Tests\Feature\ParticipateInForumTest
  ✓ un authenticated user cant participate in forum
  ✓ an authenticated user can participate in forum

   PASS  Tests\Feature\ThreadsTest
  ✓ a user can view threads
  ✓ a user can view a single thread
  ✓ a user can view a reply associated with a thread

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
