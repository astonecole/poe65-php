const express = require('express');
const app = express();

app.get('/', (req, res) => {
    res.json({
        message: 'Everything is find ^^'
    });
});

app.listen(3000, '0.0.0.0', () => {
    console.log('Server is running...');
});
