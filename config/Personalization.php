<?php
/*
 * Personalization Configuration
 * Handles URL parameter reading with fallback to Cynix Inc
 * 
 * URL Parameters (Query String):
 * - bn=Business Name (defaults to "Cynix Inc")
 * - e=Email (defaults to info.cynixinc@gmail.com)
 * - p=Phone (defaults to +94722558244)
 * - a=Address (defaults to 267, Jampettah Street, Colombo 13)
 * - w=Website (defaults to cynixinc.com)
 * - t=Tagline/Hero Text
 * - c=Primary Color (hex, defaults to #F45B1E)
 * - s=Tagline/Hero Subtitle
 * - fb=Facebook URL
* - tw=Twitter URL
* - li=LinkedIn URL
* - ig=Instagram URL
* - mt=Marquee Text (repeating tagline)
* - at=About Title (main headline)
* - ad=About Description (company background)
* - ct=CEO Title (job title for about section)
 * 
 * Example URL:
 * ?bn=Acme Corp&e=hello@acme.com&p=5551234567&a=123 Business St&w=acme.com
 */

class Personalization {
    private static $data = null;
    
    private static $defaults = [
        'business_name' => 'Cynix Inc Digital Solutions',
        'email' => 'info.cynixinc@gmail.com',
        'phone' => '+94722558244',
        'address' => '267, Jampettah Street, Colombo 13',
        'website' => 'cynixinc.com',
        'tagline' => 'Building Better Solutions',
        'hero_text' => 'We build everything you need',
        'primary_color' => '#F45B1E',
        'facebook' => '#',
        'twitter' => '#',
        'linkedin' => '#',
        'instagram' => '#',
        'marquee_text' => 'Building better solutions for tomorrow',
        'about_title' => 'We Build Quality. You Make It Perfect',
        'about_description' => 'Our team is dedicated to delivering exceptional results on every project. From planning to completion, we ensure quality and professionalism at every stage.',
        'ceo_title' => 'Director & Founder',
    ];
    
    /**
     * Initialize personalization data from URL parameters
     */
    public static function init() {
        if (self::$data !== null) {
            return self::$data;
        }
        
        self::$data = [];
        
        // Map URL params to internal keys
        $paramMap = [
            'bn' => 'business_name',
            'e' => 'email',
            'p' => 'phone',
            'a' => 'address',
            'w' => 'website',
            't' => 'tagline',
            'ht' => 'hero_text',
            'c' => 'primary_color',
            'fb' => 'facebook',
            'tw' => 'twitter',
            'li' => 'linkedin',
            'ig' => 'instagram',
            'mt' => 'marquee_text',
            'at' => 'about_title',
            'ad' => 'about_description',
            'ct' => 'ceo_title',
        ];
        
        // Read from GET parameters
        foreach ($paramMap as $urlParam => $internalKey) {
            $value = isset($_GET[$urlParam]) ? trim($_GET[$urlParam]) : null;
            
            if (!empty($value)) {
                // Sanitize based on type
                if ($internalKey === 'email') {
                    $value = filter_var($value, FILTER_SANITIZE_EMAIL);
                } elseif ($internalKey === 'phone') {
                    $value = preg_replace('/[^0-9+\-\s()]/', '', $value);
                } elseif ($internalKey === 'primary_color') {
                    // Validate hex color
                    if (!preg_match('/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/', $value)) {
                        $value = null;
                    }
                } else {
                    $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
                }
                
                self::$data[$internalKey] = $value;
            } else {
                // Use default
                self::$data[$internalKey] = self::$defaults[$internalKey];
            }
        }
        
        // Ensure all keys exist
        foreach (self::$defaults as $key => $default) {
            if (!isset(self::$data[$key])) {
                self::$data[$key] = $default;
            }
        }
        
        return self::$data;
    }
    
    /**
     * Get a personalization value
     */
    public static function get($key, $default = null) {
        if (self::$data === null) {
            self::init();
        }
        
        return self::$data[$key] ?? $default ?? self::$defaults[$key] ?? null;
    }
    
    /**
     * Get all personalization data
     */
    public static function getAll() {
        if (self::$data === null) {
            self::init();
        }
        return self::$data;
    }
    
    /**
     * Get business name initials for logo
     */
    public static function getBusinessInitials() {
        $name = self::get('business_name', 'CI');
        $words = explode(' ', $name);
        $initials = '';
        
        foreach (array_slice($words, 0, 2) as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }
        
        return $initials ?: 'CI';
    }
    
    /**
     * Get CSS custom properties for theme color
     */
    public static function getThemeCss() {
        $color = self::get('primary_color');
        return "
        <style>
            :root {
                --personalization-color: {$color};
            }
        </style>
        ";
    }
}

// Auto-initialize on first include
Personalization::init();
?>
