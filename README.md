<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tests progress..,

     PASS  Tests\Unit\ReplyTest<br/>
  ✓ a reply has an owner<br/>

   PASS  Tests\Unit\ThreadTest<br/>
  ✓ a thread has replies<br/>
  ✓ a thread has a creator<br/>
  ✓ a thread can add a reply<br/>
  ✓ a thread belongs to a category<br/>
  ✓ a thread can make a string path<br/>

   PASS  Tests\Feature\CreateThreadsTest<br/>
  ✓ guests cant create threads<br/>
  ✓ guests cant see the create thread page<br/>
  ✓ an authenticated user can create new forum threads<br/>
  ✓ a thread requires a title<br/>
  ✓ a thread requires a body<br/>
  ✓ a thread requires a category id<br/>

   PASS  Tests\Feature\ParticipateInForumTest<br/>
  ✓ un authenticated user cant reply in forum<br/>
  ✓ an authenticated user can reply in forum<br/>
  ✓ a reply requires a body

   PASS  Tests\Feature\ThreadsTest<br/>
  ✓ a user can view threads<br/>
  ✓ a user can view a single thread<br/>
  ✓ a user can view a reply associated with a thread<br/>
  ✓ a user can filter threads according to category<br/>
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
