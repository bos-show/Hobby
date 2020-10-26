new Vue({
  el: '#sample01',
  data: {
    text: 'サンプルテキスト'
  }
});

new Vue({
  el: '#sample02',
  data: {
    num: '0'
  }
});

new Vue({
  el: '#sample03',
  data: {
    input: 'サンプルテキスト',
    text: ''
  },
  methods: {
    output: function (){
      this.text = this.input;
    }
  }
});

new Vue({
  el: '#sample04',
  data: {
    html: '<p>サンプルHTML</p>'
  }
});

new Vue({
  el: '#sample05',
  data: {
    checked: true
  }
});

new Vue({
  el: '#sample06',
  data: {
    items: [
      { content: 'アイテムA'},
      { content: 'アイテムB'},
      { content: 'アイテムC'}
    ]
  }
});

new Vue({
  el: '#sample07',
  data: {
    picked: 'blue'
  }
});
