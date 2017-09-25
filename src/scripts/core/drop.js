// var dropInstance = new Drop({
//   target: document.querySelector('.drop-target'),
//   content: document.querySelector('.drop-list'),
//   position: 'bottom left',
//   openOn: 'hover',
//   constrainToWindow: true,
//   remove: false,
//   constrainToScrollParent: false,
//   classes: 'drop-theme-arrows-bounce-dark',
//   tetherOptions: {}
// });

(function () {
  var setupExamples = function () {
    return $('.menu-item-has-children').each(function () {
      var item, target, content, drop;
      item = this;
      target = item; //item.querySelector('.drop-target')
      content = item.querySelector('.sub-menu').innerHTML;
      return drop = new Drop({
        target: item,
        content: content,
        classes: '',
        position: 'bottom left',
        constrainToWindow: true,
        constrainToScrollParent: false,
        openOn: 'hover focus',
        tetherOptions: {
          constraints: [{
            to: 'scrollParent',
            attachment: 'none together',
            pin: true
          }],
          optimizations: {
            moveElement: false
          }
        }
      });
    });
  };
  setupExamples();

  // var dropMenu = function () {
  //   var drop;
  //   return drop = new Drop({
  //     target: $('.drop-target')[0],
  //     content: $('.drop-src').html(),
  //     classes: '',
  //     position: 'bottom left',
  //     constrainToWindow: true,
  //     constrainToScrollParent: false,
  //     openOn: 'hover focus',
  //     tetherOptions: {
  //       constraints: [{
  //         to: 'scrollParent',
  //         attachment: 'none together',
  //         pin: true
  //       }],
  //       optimizations: {
  //         moveElement: false
  //       }
  //     }
  //   });
  // };
  // dropMenu();

}).call(this);