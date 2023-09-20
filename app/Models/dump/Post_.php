<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            'title' => "Judul Post Pertama",
            'slug' => "judul-post-pertama",
            'author' => "Iqbal Pratama",
            'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo reprehenderit corporis dicta autem modi neque dolore veniam cum? Magnam sunt veritatis repellendus expedita inventore, culpa, a praesentium obcaecati debitis libero sequi aperiam sint eveniet velit quia ab fuga fugiat ipsam tempore voluptatem laudantium temporibus amet? Quia aliquam veniam, laborum minus libero ex, cupiditate inventore dolores molestiae animi autem quisquam. Officia impedit iure velit magni quas ipsum alias totam quidem laborum dolor. Vero suscipit debitis doloremque? Eveniet reiciendis vero porro quod recusandae doloremque ratione sunt? Voluptatibus explicabo repudiandae aperiam et deserunt distinctio nesciunt excepturi aliquid sint doloribus error libero suscipit, nisi sit. Aliquid consequuntur accusantium ea, ipsa repudiandae saepe quas rem assumenda sequi tempore enim explicabo cum, cupiditate tenetur veritatis nisi!"
        ],
        [
            'title' => "Judul Post Kedua",
            'slug' => "judul-post-kedua",
            'author' => "Wandi",
            'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, corrupti quae. Debitis et provident eveniet dolorem repudiandae similique voluptatem, quidem distinctio reprehenderit placeat quis itaque quasi deleniti consectetur nemo labore sit maxime consequatur vitae perspiciatis mollitia? Magnam adipisci, dolores aperiam doloribus qui mollitia porro cum? Illo illum a reprehenderit excepturi dolorem hic iure fuga ipsa quisquam deleniti sint fugit nihil repellendus incidunt corporis quam assumenda explicabo voluptatum voluptas exercitationem, dicta nemo nostrum corrupti. Corporis ratione sapiente rerum ad dolorem, tempore possimus consectetur sunt nam minus voluptas ullam totam libero tempora iusto, architecto praesentium nemo repudiandae corrupti deserunt alias excepturi dolorum consequuntur aspernatur! Atque, ad. Non nemo reprehenderit quod cum magni nostrum obcaecati, sapiente sed doloremque earum deserunt hic at similique odio numquam amet modi perspiciatis id consequatur repellat? Quasi omnis quisquam magnam sequi fugiat cum quos corporis, consequatur ad nobis consequuntur libero dolorum doloremque debitis! Sunt quis officia quam, voluptate, quisquam accusantium totam similique exercitationem porro, alias inventore maxime error!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
