<?php
    namespace SamirEltabal\CmsSystem;

    use Illuminate\Support\Facades\Facade;


    class CmsSystemFacade extends Facade {
        protected static function getFacadeAccessor()
        {
            return 'cmssystem';
        }

        public static function ping () {
            return response()->json([
                'message' => 'cms system is responding',
                'version' => config('cms.version')
            ], 200);
        }
    }
