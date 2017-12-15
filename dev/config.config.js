module.exports = {
    plugins: [
        require('cssnano')({
            preset: 'default',
        }),
        require uncss({
            html: ['index.html', 'posts/**/*.html', 'http://example.com']
        }),
    ],
};
