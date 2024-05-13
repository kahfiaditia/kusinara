<section id="blog" class="team">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Blog</h2>
        </div>
        <div class="row">
            <?php $no = 1; ?>
            @foreach ($blog as $item)
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" <?php
                if ($no > 1) {
                    $total_team = $no * 100;
                    echo "data-aos-delay='$total_team'";
                }
                ?>>
                    <div class="member">
                        <?php $id = Crypt::encryptString($item->id); ?>
                        <a href="{{ route('blog', $id) }}">
                            <div class="pic"><img src="{{ URL::asset('files/blog/' . $item->image) }}" class=""
                                    height="306px" width="306px">
                            </div>
                            <div class="member-info">
                                <h4>{{ $item->title }}</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <?php $no++; ?>
            @endforeach
        </div>
    </div>
</section>
