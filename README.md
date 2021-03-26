# minimalistic-theme

### Notes

On the featured images, I would like them to keep them as rectangles throughout the site. I still need to play around with the heights

For the about section, I was having a difficult time figuring out how to change the size of that avatar. So instead I thought it would make more sense to allow the user to add their own text and image. 

I am having a difficult time figuring out how I can have an archive page that has all the posts on it with pagination. 



### Sources
#### Featured Images

**Image Overlay**
https://codepen.io/AkayGaur/pen/GRJgvWE

**Filter Effect**
https://developer.mozilla.org/en-US/docs/Web/CSS/filter

#### WordPress Documentation

**Multiple Length Excerpts**
For the excerpt, I wanted different excerpt lenghts on different pages. I used this code I found on StackOverflow as a solution.
https://stackoverflow.com/questions/4082662/multiple-excerpt-lengths-in-wordpress

**Category List using Lopp**
Similar to the way we coded out the list of tags, I wanted to do the same for categories. I had to search throught google, but found the answer through stackoverflow
https://stackoverflow.com/questions/5299033/wordpress-sidebar-make-custom-loop-display-posts-in-same-category-as-single-pos

**Using Bootstrap with WP Main Nav**
I was having a difficult time using getting Bootstrap to work with the navigation since the li did not take the nav-link class. I found a function through Stack Overflow to fix this issue. 

```
 function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
```