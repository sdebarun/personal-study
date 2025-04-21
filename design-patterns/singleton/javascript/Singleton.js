class Singleton {
    static _instances = {};
    constructor() {
        this.timestamp = Date.now();
    }

    static instance() {
        let cls = this.name;
        if(!this._instances[cls]){
            this._instances.cls = new this();
        }
        return this._instances[cls];
    }
}


function checkSingleton(){
    let cls1 = Singleton.instance();
    let cls2 = Singleton.instance();

    if(cls1 === cls2){
        console.log(`${cls1.timestamp } and ${cls2.timestamp} are same and singleton works fine`);
    }else {
        console.log("Singleton failed");
    }
}

checkSingleton();