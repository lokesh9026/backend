const http = require('http');
const requestListener = (req, res) => {
    console.log("Request is Incoming");


    const responseData = {
        message: "Hello, Everyone",
        articleData: {
            articleName: "Use JSON in Node.js",
            category: "NodeJS",
            status: "published"
        },
        endingMessage: "This is JSON Node.js tutorial"
    }
    const jsonContent = JSON.stringify(responseData);
    res.end(jsonContent);
};
const server = http.createServer(requestListener);
server.listen(3000, 'localhost', function() {
    console.log("Server is Listening at Port 3000!");
});
