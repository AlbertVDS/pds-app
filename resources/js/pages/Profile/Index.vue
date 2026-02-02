<template>
  <div class="container py-4">
    <!-- Profile Section -->
    <div class="profile-section mb-4">
      <div class="d-flex align-items-center mb-3">
        <div class="profile-icon me-3">
          <i class="fa-solid fa-user fa-2x text-white"></i>
        </div>
        <div>
          <h3 class="mb-0" id="profile">Profile Settings</h3>
          <p class="text-muted mb-0">Manage your account information</p>
        </div>
      </div>
      
      <div class="card profile-card shadow-sm">
        <div class="card-body p-4">
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fa-solid fa-user me-2"></i>Name
              </label>
              <div class="input-group">
                <span class="input-group-text bg-light">
                  <i class="fa-solid fa-pen"></i>
                </span>
                <input 
                  type="text" 
                  class="form-control" 
                  v-model="formData.user.name"
                  placeholder="Enter your name"
                >
              </div>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fa-solid fa-envelope me-2"></i>Email
              </label>
              <div class="input-group">
                <span class="input-group-text bg-light">
                  <i class="fa-solid fa-at"></i>
                </span>
                <input 
                  type="email" 
                  class="form-control bg-light" 
                  :value="user?.email" 
                  disabled
                >
              </div>
              <small class="text-muted">Email cannot be changed</small>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6">
              <label class="form-label fw-bold">
                <i class="fa-solid fa-globe me-2"></i>Language
              </label>
              <select v-model="formData.language" class="form-select language-select">
                <option :value="defaultLanguage?.id" :data-image="getFlagUrl(defaultLanguage?.code)">
                  {{ defaultLanguage?.name }}
                </option>
                <option 
                  v-for="language in languages" 
                  :key="language.id" 
                  :value="language.id"
                  :data-image="getFlagUrl(language.code)"
                >
                  {{ language.name }}
                </option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- FODMAP Settings Section -->
    <div class="fodmap-section mb-4">
      <div class="d-flex align-items-center mb-3">
        <div class="fodmap-icon me-3">
          <i class="fa-solid fa-leaf fa-2x text-white"></i>
        </div>
        <div>
          <h3 class="mb-0" id="fodmap">FODMAP Settings</h3>
          <p class="text-muted mb-0">Select FODMAPs you are sensitive to</p>
        </div>
      </div>
      
      <div class="card fodmap-card shadow-sm">
        <div class="card-body p-4">
          <div class="fodmap-grid">
            <div 
              v-for="fodmap in fodmapItems" 
              :key="fodmap.key"
              class="fodmap-item"
              :class="{ 'active': formData.fodmaps[fodmap.key] }"
              @click="toggleFodmap(fodmap.key)"
            >
              <div class="fodmap-icon-wrapper">
                <i :class="fodmap.icon"></i>
              </div>
              <span class="fodmap-label">{{ fodmap.label }}</span>
              <div class="fodmap-check">
                <i class="fa-solid fa-check"></i>
              </div>
              <input 
                type="checkbox" 
                :name="`fodmaps[${fodmap.key}]`"
                v-model="formData.fodmaps[fodmap.key]"
                class="d-none"
              >
            </div>
          </div>
          
          <div class="mt-4">
            <button 
              @click="saveSettings" 
              :disabled="saving"
              class="btn btn-success btn-lg"
            >
              <i class="fa-solid fa-save me-2"></i>
              {{ saving ? 'Saving...' : 'Save FODMAP Settings' }}
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Mailing Settings Section -->
    <div class="mailing-section mb-4">
      <div class="d-flex align-items-center mb-3">
        <div class="mailing-icon me-3">
          <i class="fa-solid fa-envelope-open-text fa-2x text-white"></i>
        </div>
        <div>
          <h3 class="mb-0" id="mailing">Mailing Settings</h3>
          <p class="text-muted mb-0">Choose to receive emails about recipes, tips, and updates</p>
        </div>
      </div>
      
      <div class="card mailing-card shadow-sm">
        <div class="card-body p-4">
          <div class="table-responsive">
            <table class="table table-hover mailing-table">
              <thead>
                <tr>
                  <th scope="col">
                    <i class="fa-solid fa-users me-2"></i>Mailing Groups
                  </th>
                  <th scope="col">
                    <i class="fa-solid fa-circle-info me-2"></i>Info
                  </th>
                  <th scope="col" class="text-center">
                    <i class="fa-solid fa-bell me-2"></i>Subscribe
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="mailingGroup in mailingGroups" :key="mailingGroup.id">
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="mailing-group-icon me-3">
                        <i class="fa-regular fa-newspaper"></i>
                      </div>
                      <span class="fw-bold">{{ mailingGroup.name }}</span>
                    </div>
                  </td>
                  <td>
                    <span class="text-muted">{{ mailingGroup.description }}</span>
                  </td>
                  <td class="text-center">
                    <div class="form-check form-switch d-inline-block">
                      <input 
                        class="form-check-input" 
                        type="checkbox" 
                        :id="`mailing-${mailingGroup.id}`"
                        :value="mailingGroup.id" 
                        v-model="formData.mailingGroups"
                      >
                      <label class="form-check-label" :for="`mailing-${mailingGroup.id}`">
                        {{ formData.mailingGroups.includes(mailingGroup.id) ? 'Subscribed' : 'Not Subscribed' }}
                      </label>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- API Token Section -->
    <div class="token-section mb-4">
      <div class="d-flex align-items-center mb-3">
        <div class="token-icon me-3">
          <i class="fa-solid fa-key fa-2x text-white"></i>
        </div>
        <div>
          <h3 class="mb-0">API Token</h3>
          <p class="text-muted mb-0">Generate an API token for external access</p>
        </div>
      </div>
      
      <div class="card token-card shadow-sm">
        <div class="card-body p-4">
          <div class="token-display mb-3">
            <label class="form-label fw-bold">
              <i class="fa-solid fa-key me-2"></i>Your API Token
            </label>
            <div class="input-group">
              <span class="input-group-text bg-secondary text-white">
                <i class="fa-solid fa-lock"></i>
              </span>
              <input 
                type="text" 
                class="form-control font-monospace" 
                :value="apiToken || 'Click generate to create a token'" 
                readonly
                placeholder="No token generated"
              >
              <button 
                @click="generateToken" 
                class="btn btn-primary"
                :disabled="generating"
              >
                <i class="fa-solid fa-rotate me-2"></i>
                {{ generating ? 'Generating...' : 'Generate New Token' }}
              </button>
            </div>
            <small class="text-muted" v-if="apiToken">
              <i class="fa-solid fa-triangle-exclamation me-1"></i>
              Make sure to copy your token now. You won't be able to see it again!
            </small>
          </div>
        </div>
      </div>
    </div>

    <!-- Save All Settings -->
    <div class="save-section mb-4">
      <div class="card save-card shadow-sm bg-primary bg-opacity-10">
        <div class="card-body p-4 text-center">
          <h5 class="mb-3">
            <i class="fa-solid fa-check-circle me-2 text-success"></i>
            Ready to save all changes?
          </h5>
          <button 
            @click="saveSettings" 
            :disabled="saving"
            class="btn btn-success btn-lg px-5"
          >
            <i class="fa-solid fa-floppy-disk me-2"></i>
            {{ saving ? 'Saving All Changes...' : 'Apply All Changes' }}
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, computed, onMounted } from 'vue'
import { useAuthStore } from '../../stores/auth'
import api from '../../services/api'

const authStore = useAuthStore()
const user = computed(() => authStore.user)

const saving = ref(false)
const generating = ref(false)
const apiToken = ref('')
const languages = ref([])
const mailingGroups = ref([])
const defaultLanguage = ref(null)

const fodmapItems = [
  { key: 'fructose', label: 'Fructose', icon: 'fa-solid fa-carrot' },
  { key: 'lactose', label: 'Lactose', icon: 'fa-solid fa-cheese' },
  { key: 'mannitol', label: 'Mannitol', icon: 'fa-solid fa-mushroom' },
  { key: 'sorbitol', label: 'Sorbitol', icon: 'fa-solid fa-apple-whole' },
  { key: 'GOS', label: 'GOS', icon: 'fa-solid fa-beans' },
  { key: 'fructan', label: 'Fructan', icon: 'fa-solid fa-wheat-awn' }
]

const formData = reactive({
  user: { name: '' },
  language: null,
  fodmaps: {
    fructose: false,
    lactose: false,
    mannitol: false,
    sorbitol: false,
    GOS: false,
    fructan: false
  },
  mailingGroups: []
})

const getFlagUrl = (code) => {
  if (!code) return ''
  return `https://${window.location.host}/img/flags/${code}.png`
}

const toggleFodmap = (key) => {
  formData.fodmaps[key] = !formData.fodmaps[key]
}

const fetchUserData = async () => {
  if (user.value) {
    formData.user.name = user.value.name || ''
    formData.language = user.value.language_id
    formData.fodmaps = {
      fructose: user.value.fodmap?.fructose || false,
      lactose: user.value.fodmap?.lactose || false,
      mannitol: user.value.fodmap?.mannitol || false,
      sorbitol: user.value.fodmap?.sorbitol || false,
      GOS: user.value.fodmap?.GOS || false,
      fructan: user.value.fodmap?.fructan || false
    }
    formData.mailingGroups = user.value.mailing_groups?.map(mg => mg.mailing_group_id) || []
  }
}

const fetchLanguages = async () => {
  try {
    const response = await api.get('/languages')
    languages.value = response.data.languages || []
    defaultLanguage.value = response.data.default || null
  } catch (error) {
    console.error('Failed to fetch languages:', error)
  }
}

const fetchMailingGroups = async () => {
  try {
    const response = await api.get('/mailing-groups')
    mailingGroups.value = response.data || []
  } catch (error) {
    console.error('Failed to fetch mailing groups:', error)
  }
}

const saveSettings = async () => {
  saving.value = true
  try {
    await api.post('/user/settings', formData)
    await authStore.fetchUser()
    // Show success notification
    const toast = document.createElement('div')
    toast.className = 'alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 m-4'
    toast.innerHTML = `
      <strong><i class="fa-solid fa-check-circle me-2"></i>Success!</strong> Your settings have been saved.
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `
    document.body.appendChild(toast)
    setTimeout(() => toast.remove(), 3000)
  } catch (error) {
    console.error('Failed to save settings:', error)
    alert('Failed to save settings. Please try again.')
  } finally {
    saving.value = false
  }
}

const generateToken = async () => {
  generating.value = true
  try {
    const response = await api.post('/user/tokens')
    apiToken.value = response.data.token
    // Show success notification
    const toast = document.createElement('div')
    toast.className = 'alert alert-info alert-dismissible fade show position-fixed bottom-0 end-0 m-4'
    toast.innerHTML = `
      <strong><i class="fa-solid fa-key me-2"></i>Token Generated!</strong> Please copy it now.
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `
    document.body.appendChild(toast)
    setTimeout(() => toast.remove(), 5000)
  } catch (error) {
    console.error('Failed to generate token:', error)
    alert('Failed to generate token. Please try again.')
  } finally {
    generating.value = false
  }
}

onMounted(async () => {
  await authStore.fetchUser()
  await fetchUserData()
  await fetchLanguages()
  await fetchMailingGroups()
})
</script>

<style scoped>
.profile-icon,
.fodmap-icon,
.mailing-icon,
.token-icon {
  width: 50px;
  height: 50px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.profile-icon { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
.fodmap-icon { background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); }
.mailing-icon { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
.token-icon { background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); }

.profile-card,
.fodmap-card,
.mailing-card,
.token-card,
.save-card {
  border: none;
  border-radius: 16px;
}

.profile-card { border-left: 4px solid #667eea; }
.fodmap-card { border-left: 4px solid #11998e; }
.mailing-card { border-left: 4px solid #f5576c; }
.token-card { border-left: 4px solid #4facfe; }
.save-card { border-left: 4px solid #198754; }

.fodmap-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 1rem;
}

.fodmap-item {
  position: relative;
  padding: 1.5rem 1rem;
  border: 2px solid #e9ecef;
  border-radius: 12px;
  text-align: center;
  cursor: pointer;
  transition: all 0.3s ease;
  background: #fff;
}

.fodmap-item:hover {
  border-color: #11998e;
  transform: translateY(-2px);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.fodmap-item.active {
  border-color: #11998e;
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  color: white;
}

.fodmap-item.active .fodmap-label {
  color: white;
}

.fodmap-icon-wrapper {
  font-size: 2rem;
  margin-bottom: 0.5rem;
  color: #11998e;
}

.fodmap-item.active .fodmap-icon-wrapper {
  color: white;
}

.fodmap-label {
  font-weight: 600;
  color: #495057;
  display: block;
}

.fodmap-check {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background: #11998e;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 0.75rem;
  opacity: 0;
  transform: scale(0);
  transition: all 0.3s ease;
}

.fodmap-item.active .fodmap-check {
  opacity: 1;
  transform: scale(1);
}

.mailing-group-icon {
  width: 40px;
  height: 40px;
  border-radius: 8px;
  background: #f8f9fa;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #f5576c;
}

.mailing-table th {
  border-top: none;
  font-weight: 600;
  color: #495057;
}

.mailing-table td {
  vertical-align: middle;
}

.form-check-input:checked {
  background-color: #198754;
  border-color: #198754;
}

.form-check-input:focus {
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25);
}

.language-select {
  padding: 0.625rem 1rem;
  border-radius: 8px;
}

.token-display input {
  font-family: 'Courier New', monospace;
  letter-spacing: 1px;
}

.save-card .btn-success {
  padding: 0.75rem 3rem;
  border-radius: 30px;
}

@media (max-width: 768px) {
  .fodmap-grid {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .d-flex.align-items-center {
    flex-direction: column;
    align-items: flex-start !important;
  }
  
  .profile-icon,
  .fodmap-icon,
  .mailing-icon,
  .token-icon {
    margin-bottom: 0.5rem;
  }
}
</style>

