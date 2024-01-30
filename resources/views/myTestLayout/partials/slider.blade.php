<section class="slider alert alert-success p-5">
    <h1>THIS IS fake slider</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel qui, iusto officiis odio excepturi sint enim soluta eum reprehenderit culpa a incidunt quasi, vitae unde explicabo aperiam, repudiandae sequi! Nemo.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nisi, debitis nobis modi magni perspiciatis, consequatur corrupti quod animi, id laboriosam pariatur rem harum voluptate reprehenderit excepturi maxime illo quos?

    </p>

    @forelse ($data as $item)
        <h2>{{$item}}</h2>
    @empty
        <h3>no record</h3>
    @endforelse
</section>
