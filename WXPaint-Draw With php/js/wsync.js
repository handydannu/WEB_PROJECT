/**
 *
 * WSync
 * Author : Asih Joko Purnomo
 *
 * Required jQuery to run
 *
 */

WSync = {
    data: '',
    timer: 0,
    activity: 1100,
    interval: 50,
    isAction: true,
    isSaving: false,
    actionCounter: 0,

    filename: '',
    WX: null,

    init: function (WX) {
        this.WX = WX;
        this.runTimer();
        this.reload();
    },

    runTimer: function () {
        setInterval(function () {
            //$('#action').html(WSync.activity);
            if (WSync.timer > 0)
                WSync.timer--;
            if (WSync.activity < 10000)
                WSync.activity++;

            WSync.showInfo(WSync.timer);

            if (WSync.timer == 0) {
                if (!WSync.isAction) {
                    WSync.isAction = true;
                    WSync.runAction();
                }
            }
        }, this.interval);

        setInterval(function () {
            if (!WSync.isSaving && WSync.activity > 500) {
                WSync.reload();
            }
        }, 1000);
    },

    reload: function () {
        if (this.WX.isProcessing)
            return;

        WSync.isSaving = true;
        $.post('lib/action.php', {'action': 'get', 'filename': WSync.filename}).done(function (data) {
            WSync.WX.setDataJSON(data);
            WSync.WX.clearCanvas();
            WSync.WX.redraw();
            WSync.isSaving = false;
        }).fail(function () {
                WSync.isSaving = false;
            });
    },

    runAction: function () {
        //$('#result').html('saving...');
        WSync.data = this.WX.getDataJSON();
        $.post('lib/action.php', {'action': 'save', 'data': WSync.data, 'filename': this.filename }).done(function (data) {
            if (data == '1') {
                $('#result').html('saved');
            }
            WSync.isSaving = false;
        }).fail(function () {
                WSync.isSaving = false;
            });
    },

    showInfo: function () {
        $('#ind1').css({'width': this.timer * 10 + '%'});

        if (this.activity < 500)
            $('#ind2').css({'width': this.activity / 5 + '%'});
    },

    save: function () {
        WSync.timer = 10;
        WSync.activity = 0;
        WSync.isAction = false;
        WSync.isSaving = true;
    },

    addReference: function (WX) {
        this.WX = WX;
    }
};
