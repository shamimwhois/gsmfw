const Blog = (function() {
  const POSTS_KEY = 'hud_blog_posts';

  function getPosts() {
    const stored = localStorage.getItem(POSTS_KEY);
    if (stored) return JSON.parse(stored);
    
    const defaultPosts = [
      {
        id: '1',
        slug: 'designing-hud-interfaces',
        title: 'Designing HUD Interfaces for Real Conversion',
        excerpt: 'A deep dive on balancing futuristic aesthetics with business outcomes and accessibility.',
        content: `# Designing HUD Interfaces for Real Conversion

The aesthetic of sci-fi interfaces is captivating, but how do we make them actually work for businesses?

## The Challenge

When we design HUD-style interfaces, we often get caught up in the visual excitement:
- Glowing borders
- Animated data streams
- Futuristic typography

But we must remember: **function precedes form**.

## Key Principles

### 1. Hierarchy Matters
Even in a futuristic design, users need to know where to look first.

### 2. Accessibility Is Not Optional
High contrast, clear labels, and keyboard navigation are essential.

### 3. Performance Affects Perception
A slow interface feels cheap, no matter how cool it looks.

## Conclusion

The best sci-fi interfaces feel both futuristic AND functional.`,
        tags: ['UI', 'Frontend', 'Motion'],
        date: '2024-01-15',
        featured: true
      },
      {
        id: '2',
        slug: 'micro-interactions-that-convert',
        title: 'Micro-interactions that Convert',
        excerpt: 'Animation as guidance, not decoration.',
        content: `# Micro-interactions that Convert

Every animation should serve a purpose.

## The Psychology of Motion

Motion draws attention. Use it wisely:
- **Loading states** - keep users engaged
- **Success feedback** - reinforce actions  
- **Error states** - guide correction

## Pro Tips

1. Keep animations under 300ms
2. Use easing, not linear timing
3. Don't animate everything at once`,
        tags: ['UI', 'Motion'],
        date: '2024-01-10'
      },
      {
        id: '3',
        slug: 'gridcn-theme-system',
        title: 'The Gridcn Theme System',
        excerpt: 'Greek gods meet the Grid - creating authentic Tron-inspired themes.',
        content: `# The Gridcn Theme System

A comprehensive theme system inspired by Tron: Legacy.

## Theme Variants

- **TRON** - User, cyan primary
- **ARES** - God of War, red primary
- **CLU** - System Admin, orange primary
- **ATHENA** - Wisdom, gold primary
- **APHRODITE** - Love, pink primary
- **POSEIDON** - Sea, blue primary

## Installation

\`\`\`bash
pnpm dlx shadcn@latest list @thegridcn
\`\`\``,
        tags: ['Frontend', 'Theming'],
        date: '2024-01-05'
      }
    ];
    
    localStorage.setItem(POSTS_KEY, JSON.stringify(defaultPosts));
    return defaultPosts;
  }

  function getPostBySlug(slug) {
    const posts = getPosts();
    return posts.find(p => p.slug === slug);
  }

  function getPostById(id) {
    const posts = getPosts();
    return posts.find(p => p.id === id);
  }

  function renderMarkdown(text) {
    let html = text
      .replace(/^### (.+)$/gm, '<h3>$1</h3>')
      .replace(/^## (.+)$/gm, '<h2>$1</h2>')
      .replace(/^# (.+)$/gm, '<h1>$1</h1>')
      .replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>')
      .replace(/\*(.+?)\*/g, '<em>$1</em>')
      .replace(/`{3}(\w+)?\n([\s\S]*?)`{3}/g, '<pre><code>$2</code></pre>')
      .replace(/`([^`]+)`/g, '<code>$1</code>')
      .replace(/^\d+\. (.+)$/gm, '<li>$1</li>')
      .replace(/^- (.+)$/gm, '<li>$1</li>')
      .replace(/\n\n/g, '</p><p>')
      .replace(/^<li>/g, '<ul><li>');
    
    html = '<p>' + html + '</p>';
    html = html.replace(/<p><\/p>/g, '');
    html = html.replace(/<p><li>/g, '<ul><li>');
    html = html.replace(/<\/li><\/p>/g, '</li></ul>');
    
    return html;
  }

  function renderPostList(posts, containerId) {
    const container = document.getElementById(containerId);
    if (!container) return;

    container.innerHTML = posts.map(post => `
      <article class="hud-card cursor-pointer" onclick="window.location.href='./blog-post.html?id=${post.id}'">
        <p class="text-xs uppercase tracking-[0.2em] hud-line-accent">${post.date}</p>
        <h3 class="font-['Orbitron'] hud-line-accent">${post.title}</h3>
        <p class="mt-2 text-muted-theme">${post.excerpt}</p>
        <div class="mt-3 flex flex-wrap gap-2">
          ${post.tags.map(tag => `<span class="chip">${tag}</span>`).join('')}
        </div>
      </article>
    `).join('');
  }

  function loadFeaturedPost() {
    const posts = getPosts();
    const featured = posts.find(p => p.featured);
    if (!featured) return null;
    
    const container = document.getElementById('featuredPost');
    if (container) {
      container.innerHTML = `
        <p class="text-xs uppercase tracking-[0.2em] hud-line-accent">Featured Transmission</p>
        <h2 class="font-['Orbitron'] text-2xl mt-2 text-theme">${featured.title}</h2>
        <p class="mt-3 text-muted-theme">${featured.excerpt}</p>
        <a href="./blog-post.html?id=${featured.id}" class="btn btn-glow mt-4 inline-block">Read Transmission</a>
      `;
    }
    return featured;
  }

  return {
    getPosts,
    getPostBySlug,
    getPostById,
    renderMarkdown,
    renderPostList,
    loadFeaturedPost
  };
})();