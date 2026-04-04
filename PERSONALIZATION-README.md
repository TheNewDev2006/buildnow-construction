# Personalization System - URL Parameter Guide

## Overview

This Buildnow Construction template includes a **URL-based personalization system** designed for cold outreach campaigns. Customize the site with client information via query parameters without modifying any code.

**Default Agency (Fallback):** Cynix Inc Digital Solutions

---

## Quick Start

### Basic URL Format

```
http://localhost:8000/index.php?bn=ClientName&e=client@email.com&p=+15551234567
```

### Example URLs

#### Example 1: Basic Personalization
```
http://localhost:8000/index.php?bn=Acme+Corporation&e=hello@acme.com&p=+15551234567&a=123+Business+St
```

**Result:**
- Logo shows: **AC** (Acme Corporation initials)
- Business Name: Acme Corporation
- Email: hello@acme.com
- Phone: +15551234567

#### Example 2: With Complete Info
```
http://localhost:8000/index.php?bn=Tech+Innovations+LLC&e=info@techinnovations.com&p=+14155551234&a=456+Silicon+Valley+Drive&w=techinnovations.com&c=%23FF6B35&t=Cutting+Edge+Solutions
```

**Result:**
- Logo shows: **TI** with custom brand color
- All contact details updated
- Custom tagline in hero section

#### Example 3: Social Links
```
http://localhost:8000/index.php?bn=Creative+Agency&e=contact@creative.co&fb=facebook.com/creative&tw=twitter.com/creative&li=linkedin.com/company/creative&ig=instagram.com/creative
```

---

## URL Parameters Reference

### Core Parameters

| Parameter | Name | Description | Example | Default |
|-----------|------|-------------|---------|---------|
| `bn` | Business Name | Company/Client name. Will auto-generate initials for logo (2 first letters) | `Acme+Corp` | Cynix Inc Digital Solutions |
| `e` | Email | Contact email address (sanitized) | `hello@acme.com` | info.cynixinc@gmail.com |
| `p` | Phone | Phone number (numbers, +, -, () only) | `+15551234567` | +94722558244 |
| `a` | Address | Physical address | `123+Main+St` | 267, Jampettah Street, Colombo 13 |
| `w` | Website | Company website URL | `acme.com` | cynixinc.com |

### Customization Parameters

| Parameter | Name | Description | Example | Default |
|-----------|------|-------------|---------|---------|
| `t` | Hero Tagline | Custom tagline in hero section | `Building+Better+Solutions` | We build everything you need |
| `ht` | Hero Title Text | Full hero title text | `We+Create+Success` | (see above) |
| `c` | Brand Color | Primary color (hex format with %) | `%23FF6B35` | #F45B1E |

### Social Media Parameters

| Parameter | Name | Description | Example |
|-----------|------|-------------|---------|
| `fb` | Facebook | Facebook profile/page URL | `facebook.com/yourpage` |
| `tw` | Twitter/X | Twitter/X profile URL | `twitter.com/yourpage` |
| `li` | LinkedIn | LinkedIn company URL | `linkedin.com/company/yourpage` |
| `ig` | Instagram | Instagram profile URL | `instagram.com/yourpage` |

---

## Personalization Details

### Logo Initialization (Initials Generation)

The system automatically generates initials from the business name:

- **Acme Corporation** → **AC**
- **Tech Innovations LLC** → **TI**
- **CYNIX Inc** → **CI** (default fallback)

The initials circle uses your specified brand color (or default #F45B1E).

### HTML Encoding

Special characters in parameters are automatically:
- **URLs**: Sanitized for security
- **Emails**: Validated using PHP filters
- **Text**: HTML-entity encoded to prevent conflicts
- **Colors**: Validated as hex format

### Responsive Design

The text-based logo scales automatically:
- **Desktop (>1200px)**: Full logo with initials, company name, and tagline
- **Tablet (768-1200px)**: Slightly reduced sizing
- **Mobile (<768px)**: Compact display optimized for small screens

---

## Implementation Details

### Files Modified/Created

```
config/Personalization.php              # Main personalization class
layouts/header.php                      # Updated to use text logo
layouts/header-7.php                    # Updated to use text logo
assets/css/main.css                     # Added logo styling
```

### How It Works

1. **PHP Class** (`Personalization.php`):
   - Reads URL GET parameters
   - Validates and sanitizes all input
   - Provides fallback values from Cynix Inc
   - Generates initials automatically

2. **Header Templates**:
   - Include the Personalization class
   - Display textual logo with client branding
   - Inject dynamic styling based on parameters

3. **CSS Styling**:
   - Professional text-based logo design
   - Animated entry effect
   - Responsive sizing for all devices
   - Hover effects and transitions

---

## Complete Example Campaign URL

### Buildnow (Main Template)
```
http://localhost:8000/index.php?bn=Summit+Properties+Group&e=partnerships@summitprop.com&p=+1-555-123-4567&a=789+Executive+Plaza&w=summitproperties.com&c=%2347B5D6&t=Premium+Real+Estate+Solutions&fb=facebook.com/summitproperties&tw=twitter.com/summit_prop&li=linkedin.com/company/summit-properties
```

### Buildnow Renovation (Variant Template)
```
http://localhost:8000/index-7.php?bn=Luxury+Renovations+Inc&e=hello@luxuryreno.com&p=+1-555-987-6543&a=321+Design+District&w=luxuryrenovations.com&c=%23A84C3C
```

---

## Testing

### Test Default (Cynix Inc Fallback)
```
http://localhost:8000/index.php
```

### Test With Single Parameter
```
http://localhost:8000/index.php?bn=Test+Company
```

### Test With Multiple Parameters
```
http://localhost:8000/index.php?bn=Test+Co&e=test@company.com&p=5551234567
```

### Test With Custom Color
```
http://localhost:8000/index.php?bn=Blue+Company&c=%235B7FE0
```

---

## Encoding Tips

### URL Parameter Encoding Reference

| Character | Encoded | Example |
|-----------|---------|---------|
| Space | `+` or `%20` | `Acme+Corp` or `Acme%20Corp` |
| # (in hex color) | `%23` | `%235B7FE0` for #5B7FE0 |
| + | `%2B` | `+1 (555) 123-4567` → `%2B1%20(555)%20123-4567` |
| / | `%2F` | URL path separator |
| & | `%26` | If literal & needed in data |

### Using URL Builders

Recommended: Use a URL encoder tool when building complex URLs:
- [URL Encoder Tool](https://www.urlencoder.org/)
- Browser console: `encodeURIComponent("text to encode")`

---

## Fallback Behavior

If no URL parameters are provided, all values fall back to **Cynix Inc Digital Solutions**:

```php
Business Name:  Cynix Inc Digital Solutions
Email:          info.cynixinc@gmail.com
Phone:          +94722558244
Address:        267, Jampettah Street, Colombo 13
Website:        cynixinc.com
Logo Color:     #F45B1E (orange)
```

This ensures the site remains professionally branded even without personalization parameters.

---

## API Reference

### Using the Personalization Class Directly

```php
<?php
require_once 'config/Personalization.php';

// Get a specific value
$businessName = Personalization::get('business_name');
$email = Personalization::get('email');

// Get initials for custom display
$initials = Personalization::getBusinessInitials();

// Get all personalization data
$allData = Personalization::getAll();

// Get theme CSS (includes custom color)
$themeCss = Personalization::getThemeCss();
```

---

## Security Notes

- **Email validation**: Uses PHP `FILTER_SANITIZE_EMAIL`
- **HTML encoding**: All text values are HTML-entity encoded
- **Phone validation**: Only permits digits, +, -, (), and spaces
- **Color validation**: Only accepts valid hex color codes
- **No SQL Risk**: Template does not use database queries
- **Safe for URLs**: All parameters are URL-decoded and re-encoded

---

## Support & Troubleshooting

### Logo Not Updating

1. **Check URL parameters**: Ensure parameters are properly URL-encoded
2. **Clear cache**: Check browser cache or hard refresh (Ctrl+Shift+R)
3. **Verify syntax**: Parameters should be separated by `&`

### Special Characters Breaking

Use URL encoding:
- Space: Use `+` or `%20`  
- Ampersand: Use `%26`
- Hash: Use `%23`

### Custom Color Not Applying

- Ensure hex code is valid (6 digits or 3 digits)
- Include the `#` prefix encoded as `%23`
- Example: `c=%235B7FE0` for #5B7FE0

---

## Version Info

- **Template Version**: Buildnow Construction
- **Personalization System**: 1.0
- **PHP Version Required**: 5.6+
- **Default Agency**: Cynix Inc Digital Solutions

For questions or issues, contact: **info.cynixinc@gmail.com**

---

*This personalization system is designed for cold outreach and lead generation campaigns. Each URL can be customized for a specific prospect to show a "website just built for you" experience.*
