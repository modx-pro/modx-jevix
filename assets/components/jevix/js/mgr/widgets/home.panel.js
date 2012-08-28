Jevix.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,items: [{
            html: '<h2>'+_('jevix')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,bodyStyle: 'padding: 10px'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,activeItem: 0
            ,hideMode: 'offsets'
            ,items: [{
                title: _('jevix.items')
                ,items: [{
                    html: '<p>'+_('jevix.intro_msg')+'</p><br />'
                    ,border: false
                },{
                    xtype: 'jevix-grid-items'
                    ,preventRender: true
                }]
            }]
        }]
    });
    Jevix.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(Jevix.panel.Home,MODx.Panel);
Ext.reg('jevix-panel-home',Jevix.panel.Home);
