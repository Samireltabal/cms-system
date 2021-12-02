<?php
    namespace SamirEltabal\CmsSystem;

    class CmsSystem
    {
        public static function ping() {
            return response()->json([
                'message' => 'syncit cms is responding',
                'version' => config('cms.version')
            ], 200);
        }
    }
