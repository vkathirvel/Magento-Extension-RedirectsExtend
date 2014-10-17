# Override for Optimise Web Mass 301 Redirects for Magento

optimiseweb_redirects_before_legacy
optimiseweb_redirects_before_v1
optimiseweb_redirects_before_query_strings
optimiseweb_redirects_before_catalogue_search
optimiseweb_redirects_before_exiting

        $event = $evt->getEvent();
        $requestUrl = $event->getRequestUrl();
        $originalRequestUrl = $requestUrl;
        $pattern = '/(\/shop\/cid_[0-9]*)|(\/pid_[0-9]*\/[0-9]*)|(\.aspx)/';
        $replacement = '';
        $requestUrl = preg_replace($pattern, $replacement, $requestUrl);
        $pattern = '/(-{2,})/';
        $replacement = '-';
        $requestUrl = preg_replace($pattern, $replacement, $requestUrl);
        $requestUrl = strtolower($requestUrl);

        if ($requestUrl !== $originalRequestUrl) {
            $headers = @get_headers($requestUrl);
            if (strpos($headers[0], '404') === false) {
                $response = Mage::app()->getResponse();
                $response->setRedirect($requestUrl, 301);
                $response->sendResponse();
                exit;
            }
        }
