var Pusher = require('pusher');

var pusher = new Pusher({
  appId: '227909',
  key: '4482c04c5c3d6f95e1cc',
  secret: '6b695bd40305cadc2719',
  encrypted: true
});

pusher.trigger('test_channel', 'my_event', {
  "message": "hello world"
});