<?php

/**
 * Extracts unique, sorted domain names from a list of project page files.
 *
 * This function reads each project file, finds the content of the 
 * <h2 class="prj-dmn-fnl"> tag, splits it into individual domains,
 * and returns a sorted array of unique domain names.
 *
 * @param array $project_pages An array of file paths to the project pages.
 * @return array A sorted array of unique domain strings.
 */
function get_project_domains(array $project_pages): array
{
    $all_domains = [];
    foreach ($project_pages as $project) {
        if (!file_exists($project)) continue;

        ob_start();
        @include($project);
        $content = ob_get_clean();
        
        preg_match('/<h2 class="prj-dmn-fnl">(.*?)<\/h2>/s', $content, $matches);

        if (isset($matches[1])) {
            $domains = explode(' + ', $matches[1]);
            foreach ($domains as $domain) {
                $trimmed_domain = trim($domain);
                if (!empty($trimmed_domain) && !in_array($trimmed_domain, $all_domains)) {
                    $all_domains[] = $trimmed_domain;
                }
            }
        }
    }
    sort($all_domains);
    return $all_domains;
}