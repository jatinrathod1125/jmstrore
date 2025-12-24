<div align="center">

![Velstore Logo](https://i.ibb.co/1tRYZP5R/Velstore-logo-v1.png)

# 🚀 Velstore

### Open-Source Multi-Vendor eCommerce Platform Built with Laravel

*Empower your business with a fully customizable, scalable, and feature-rich marketplace solution*

[![Downloads](https://poser.pugx.org/velstorelabs/velstore/d/total)](https://packagist.org/packages/velstorelabs/velstore)
[![Latest Stable Version](https://poser.pugx.org/velstorelabs/velstore/v/stable)](https://github.com/velstorelabs/velstore/releases)
[![CI Status](https://github.com/velstorelabs/velstore/actions/workflows/ci.yml/badge.svg)](https://github.com/velstorelabs/velstore/actions/workflows/ci.yml)
[![License](https://poser.pugx.org/velstorelabs/velstore/license)](https://github.com/velstorelabs/velstore/blob/master/LICENSE)

[🌐 Live Demo](#) • [📖 Documentation](#) • [💬 Community](#) • [🐛 Report Bug](#) • [✨ Request Feature](#)

---

![Velstore Demo](https://i.ibb.co/9mL3YZQV/velstore-demo1-resized.png)

</div>

## ✨ Why Velstore?

Velstore isn't just another eCommerce platform—it's a complete marketplace ecosystem designed for entrepreneurs, developers, and businesses who want **full control** over their online store without compromise.

```bash
🎯 Zero Configuration Hassle  •  🔧 Infinitely Customizable  •  🌍 Global Ready  •  🚀 Production Ready
```

---

## 🎨 Key Features

<table>
<tr>
<td width="50%">

### 🏪 **Multi-Vendor Architecture**
- Dedicated admin, seller & customer panels
- Individual vendor storefronts
- Commission & revenue management
- Vendor analytics dashboard

### 🌐 **Global Commerce**
- **19 language translations** included
- RTL support for Arabic & Persian
- Multi-currency ready
- Timezone-aware operations

</td>
<td width="50%">

### 🎨 **Modern Tech Stack**
- Laravel 10+ framework
- Blade templating with Laravel UI
- Yajra DataTables integration
- Laravel Sanctum authentication

### 💳 **Payment Integration**
- PayPal gateway ready
- Stripe payment processing
- Extensible payment architecture
- Secure transaction handling

</td>
</tr>
</table>

### 🧩 **Architecture Highlights**

```mermaid
graph LR
    A[Modular Design] --> B[Easy Extension]
    A --> C[Clean Code]
    B --> D[Plugin System]
    C --> E[Maintainable]
    D --> F[Custom Features]
    E --> F
```

- **Modular Structure**: Add or remove features without breaking core functionality
- **API Ready**: Built with modern API architecture using Laravel Sanctum
- **Scalable**: Designed to grow from startup to enterprise
- **Developer Friendly**: Clean, well-documented code following Laravel best practices

---

## 🌍 Supported Languages

<div align="center">

| Region | Languages |
|:------:|:---------:|
| 🌎 **Americas & Europe** | <img src="https://flagicons.lipis.dev/flags/4x3/us.svg" width="20"> English • <img src="https://flagicons.lipis.dev/flags/4x3/es.svg" width="20"> Spanish • <img src="https://flagicons.lipis.dev/flags/4x3/fr.svg" width="20"> French • <img src="https://flagicons.lipis.dev/flags/4x3/de.svg" width="20"> German • <img src="https://flagicons.lipis.dev/flags/4x3/pt.svg" width="20"> Portuguese |
| 🌍 **Europe Cont.** | <img src="https://flagicons.lipis.dev/flags/4x3/it.svg" width="20"> Italian • <img src="https://flagicons.lipis.dev/flags/4x3/nl.svg" width="20"> Dutch • <img src="https://flagicons.lipis.dev/flags/4x3/pl.svg" width="20"> Polish • <img src="https://flagicons.lipis.dev/flags/4x3/ru.svg" width="20"> Russian • <img src="https://flagicons.lipis.dev/flags/4x3/tr.svg" width="20"> Turkish |
| 🌏 **Asia** | <img src="https://flagicons.lipis.dev/flags/4x3/cn.svg" width="20"> Chinese • <img src="https://flagicons.lipis.dev/flags/4x3/jp.svg" width="20"> Japanese • <img src="https://flagicons.lipis.dev/flags/4x3/kr.svg" width="20"> Korean • <img src="https://flagicons.lipis.dev/flags/4x3/th.svg" width="20"> Thai • <img src="https://flagicons.lipis.dev/flags/4x3/vi.svg" width="20"> Vietnamese |
| 🌏 **Asia & Middle East** | <img src="https://flagicons.lipis.dev/flags/4x3/id.svg" width="20"> Indonesian • <img src="https://flagicons.lipis.dev/flags/4x3/in.svg" width="20"> Hindi • <img src="https://flagicons.lipis.dev/flags/4x3/sa.svg" width="20"> Arabic • <img src="https://flagicons.lipis.dev/flags/4x3/ir.svg" width="20"> Persian |

**19 languages** • **4 continents** • **Billions of potential customers**

</div>

---

## 📸 Platform Showcase

<details open>
<summary><b>🔥 Trending Products Section</b></summary>
<br>

![Trending Products](https://i.ibb.co/7Jy8q2CS/trending-product-1.png)

Dynamic trending products display with real-time analytics and performance tracking.

</details>

<details>
<summary><b>⭐ Featured Products Module</b></summary>
<br>

![Featured Products](https://i.ibb.co/ch5w4bv2/featured-products-velstore-laravel.png)

Showcase your best products with customizable featured sections and promotional banners.

</details>

<details>
<summary><b>📂 Smart Category Management</b></summary>
<br>

![Categories](https://i.ibb.co/vvKgdWK9/categories-velstore-laravel.png)

Hierarchical category structure with image support and SEO-friendly URLs.

</details>

---

## 🚀 Quick Start

### Prerequisites

Before you begin, ensure you have:
- PHP 8.1 or higher
- Composer
- MySQL 5.7+ or MariaDB
- Node.js & NPM

### Installation

**1️⃣ Create a new Velstore project**

```bash
composer create-project velstorelabs/velstore
```

**2️⃣ Setup environment**

```bash
cd velstore
cp .env.example .env
```

**3️⃣ Configure database**

Edit your `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=velstore
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

**4️⃣ Install Velstore with sample data**

```bash
php artisan install:velstore --with-import
```

> 💡 **Pro Tip:** Use `--with-import` flag to populate your store with sample products, categories, and demo data for instant testing.

**5️⃣ Compile assets**

```bash
npm install
npm run dev
```

**6️⃣ Start development server**

```bash
php artisan serve
```

**🎉 Done!** Visit `http://127.0.0.1:8000` in your browser.

---

## 🛠️ Tech Stack

<div align="center">

| Layer | Technology |
|:-----:|:----------:|
| **Framework** | ![Laravel](https://img.shields.io/badge/Laravel-10+-FF2D20?style=for-the-badge&logo=laravel&logoColor=white) |
| **Database** | ![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white) |
| **Frontend** | ![Blade](https://img.shields.io/badge/Blade-Templates-FF2D20?style=for-the-badge&logo=laravel&logoColor=white) |
| **Authentication** | ![Sanctum](https://img.shields.io/badge/Laravel-Sanctum-FF2D20?style=for-the-badge&logo=laravel&logoColor=white) |
| **DataTables** | ![Yajra](https://img.shields.io/badge/Yajra-DataTables-00ADD8?style=for-the-badge) |

</div>

---

## 📚 Documentation

Comprehensive documentation is coming soon! Meanwhile:

- **Installation Guide**: See [Quick Start](#-quick-start) section above
- **API Documentation**: Available at `/api/documentation` after installation
- **Developer Guide**: Check the `/docs` directory in your installation

---

## 🤝 Contributing

We love contributions! Whether it's bug reports, feature requests, or pull requests—all are welcome.

<details>
<summary><b>How to Contribute</b></summary>

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

</details>

---

## 💼 Professional Services

Need expert help with your eCommerce project?

<div align="center">

### 🎯 We Offer:

**Custom Development** • **Velstore Customization** • **Migration Services** • **Technical Support** • **Feature Development** • **Performance Optimization**

[![Share Your Project](https://img.shields.io/badge/Share%20Your%20Project-Get%20a%20Quote-success?style=for-the-badge&logo=google-forms&logoColor=white)](https://forms.gle/ZF9E9t5gUKShfHLLA)

</div>

---

## 📄 License

Velstore is open-source software licensed under the [MIT license](LICENSE).

---

<div align="center">

### 🌟 Star us on GitHub — it motivates us a lot!

[![Stars](https://img.shields.io/github/stars/velstorelabs/velstore?style=social)](https://github.com/velstorelabs/velstore)
[![Forks](https://img.shields.io/github/forks/velstorelabs/velstore?style=social)](https://github.com/velstorelabs/velstore/fork)
[![Watchers](https://img.shields.io/github/watchers/velstorelabs/velstore?style=social)](https://github.com/velstorelabs/velstore)

**Made with ❤️ by the Velstore Team**

[Website](#) • [Twitter](#) • [Discord](#) • [Support](#)

</div>