<?php '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($projects as $project)
        <url>
            <loc>{{ $project }}</loc>
            <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
            <changefreq>always</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach
    <url>
        <loc>https://mebelnyymaster.com.ua/shkafy-prihozhie</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/ofisnaya-torgovaya-mebel</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/garderoby-tumby</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/detskaya-mebel</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/kuhni</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
</urlset>
