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
        <loc>https://mebelnyymaster.com.ua/hall</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/commercial</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/wardrobe</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/children</loc>
        <lastmod>{{ now()->tz('GMT')->toAtomString() }}</lastmod>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>https://mebelnyymaster.com.ua/kitchen</loc>
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
