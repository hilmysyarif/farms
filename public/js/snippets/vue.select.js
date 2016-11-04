function selectsHelper (settings = { primaryKey: 'id', valueKey: 'name', parentKey: 'pid' }) {
    this.primaryKey = settings.primaryKey;
    this.valueKey = settings.valueKey;
    this.parentKey = settings.parentKey;
}

selectsHelper.prototype.groupChildren = function (id, list) {
    var tmp = [];
    for (var i = 0; i < list.length; i++) {
        if (list[i].pid == id) {
            tmp.push({
                id: list[i].id,
                name: list[i].name,
                pid: list[i].pid
            });
        }
    }
    // split tmp to groups. size is 10.
    var tmp1 = [];
    var tmp2 = [];
    var counter = 0;
    var size = 10;
    for (var i = 0; i < tmp.length; i++) {
        if (counter < size) {
            tmp2.push(tmp[i]);
            counter++;
        }

        // prepared one group.
        if (counter >= size || i == tmp.length -1) {
            tmp1.push(tmp2);
            counter = 0;
            tmp2 = [];
        }
    }
    return tmp1;
};

selectsHelper.prototype.groupParents = function (pid, list) {
    // get parent id of parents.
    var ppid = 0;
    for (var i = 0; i < list.length; i++) {
        if (list[i].id == pid) {
            ppid = list[i].pid;
            break;
        }
    }

    return this.groupChildren(ppid, list);
};