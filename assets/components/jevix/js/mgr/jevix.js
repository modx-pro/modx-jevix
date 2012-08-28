var Jevix = function(config) {
    config = config || {};
    Jevix.superclass.constructor.call(this,config);
};
Ext.extend(Jevix,Ext.Component,{
    page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('jevix',Jevix);

Jevix = new Jevix();