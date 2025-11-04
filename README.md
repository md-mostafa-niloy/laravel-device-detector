# Laravel Device Detector

A Laravel wrapper for the [Matomo DeviceDetector](https://github.com/matomo-org/device-detector) library.

---

## 🚀 Installation

```bash
composer require visernic/laravel-device-detector
```

---

## ⚙️ Configuration

Publish config file:

```bash
php artisan vendor:publish --provider="Visernic\\DeviceDetector\\DeviceDetectorServiceProvider" --tag="config"
```

---

## 🧠 Usage Example

```php
use DeviceDetector;

$device = DeviceDetector::detectRequest(request());

if ($device->isBot()) {
    // handle bot
} else {
    $client = $device->getClient();
    $os     = $device->getOs();
    $deviceName = $device->getDeviceName();
    $brand      = $device->getBrandName();
    $model      = $device->getModel();
}
```

---

## 🧑‍💻 Author

**Md Mostafa Niloy (Visernic)**  
📧 [mostafa@visernic.com](mailto:mostafa@visernic.com)  
🌐 [https://visernic.com](https://visernic.com)

---

## 🪪 License

MIT © 2025 Visernic
