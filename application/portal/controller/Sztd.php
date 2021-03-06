<?php



namespace qzxy\portal\Controller;
use qzxy\Base;
use qzxy\Log;
use qzxy\Chunk;
use qzxy\Thread;
use think\Controller;
use think\Db;

class Sztd extends Controller{
    public function main(){
        Log::visit("portal","sztd","");
        $chunk = [
            'id'         =>   6,
            'name'       =>   '清泽心雨 - 思政天地',
            'template'   =>   'portal/sztd/sztd',
        ];
        $this->loader($chunk['id']);
        $this->assign([
            'title' => $chunk['name'],
            'base' => Base::baseinfo(),
        ]);
        return view($chunk['template']);
    }

    public function loader($chunkid){
        $threadlist = Thread::loadlist([
            'new' => 17,
            'llts' => 20,
            'sdkm' => 23,
            'ddzs' => 24,
            'lkjt' => 59,
            'dsdj' => 60,
            'gfjy' => 63,
        ]);
        $this->assign([
            'threadlist' => $threadlist,
            'banners' => Chunk::loadbanner($chunkid),
        ]);
    }
}